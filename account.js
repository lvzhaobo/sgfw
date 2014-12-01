/**
 * vlstat �����ͳ�ƽű�
 */ 
 
var statIdName = "vlstatId"; 
var xmlHttp; 
 
/**
 * ����cookieId
 */ 
function setCookie(c_name, value, expiredays) { 
    var exdate = new Date(); 
    exdate.setDate(exdate.getDate() + expiredays); 
	document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString()) + ";path=/;"; 
} 
 
/**
 * ��ȡcookieId
 */ 
function getCookie(c_name) { 
    if (document.cookie.length > 0) { 
        c_start = document.cookie.indexOf(c_name + "="); 
        if (c_start != -1) { 
            c_start = c_start + c_name.length + 1; 
            c_end = document.cookie.indexOf(";", c_start); 
            if (c_end == -1) { 
                c_end = document.cookie.length; 
            } 
            return unescape(document.cookie.substring(c_start, c_end)); 
        } 
    } 
    return ""; 
} 
 
/**
 * ��ȡ��ǰʱ���
 */ 
function getTimestamp() { 
    var timestamp = Date.parse(new Date()); 
    return timestamp; 
} 
 
/**
 * ����statId
 */ 
function genStatId() { 
    var cookieId = getTimestamp(); 
    cookieId = "vlstat" + "-" + cookieId + "-" + Math.round(Math.random() * 3000000000); 
    return cookieId; 
} 
 
/**
 * ����StatId
 */ 
function setStatId() { 
    var cookieId = genStatId(); 
    setCookie(statIdName, cookieId, 365); 
} 
 
/**
 * ��ȡStatId
 */ 
function getStatId() { 
    var statId = getCookie(statIdName); 
    if (statId != null && statId.length > 0) { 
        return statId; 
    } else { 
        setStatId(); 
        return getStatId(); 
    } 
} 
 
/**
 * ��ȡUA
 */ 
function getUA() { 
    var ua = navigator.userAgent; 
    if (ua.length > 250) { 
        ua = ua.substring(0, 250); 
    } 
    return ua; 
} 
 
/**
 * ��ȡ���������
 */ 
function getBrower() { 
    var ua = getUA(); 
    if (ua.indexOf("Maxthon") != -1) { 
        return "Maxthon"; 
    } else if (ua.indexOf("MSIE") != -1) { 
        return "MSIE"; 
    } else if (ua.indexOf("Firefox") != -1) { 
        return "Firefox"; 
    } else if (ua.indexOf("Chrome") != -1) { 
        return "Chrome"; 
    } else if (ua.indexOf("Opera") != -1) { 
        return "Opera"; 
    } else if (ua.indexOf("Safari") != -1) { 
        return "Safari"; 
    } else { 
        return "ot"; 
    } 
} 
 
/**
 * ��ȡ���������
 */ 
function getBrowerLanguage() { 
    var lang = navigator.browserLanguage; 
    return lang != null && lang.length > 0 ? lang : ""; 
} 
 
/**
 * ��ȡ����ϵͳ
 */ 
function getPlatform() { 
    return navigator.platform; 
} 
 
/**
 * ��ȡҳ��title
 */ 
function getPageTitle() { 
    return document.title; 
} 
 
/**
 * ����һ��form
 * 
 * @return
 */ 
function createSubmitForm() { 
    var frm = document.createElement("form"); 
    document.body.appendChild(frm); 
    frm.method = "POST"; 
    return frm; 
} 
 
/**
 * Ϊform����һ��Ԫ��
 * 
 * @param inputForm
 * @param elementName
 * @param elementValue
 * @return
 */ 
function createFormElement(frmInput, elementName, elementValue) { 
    var element = document.createElement("input"); 
    element.setAttribute("id", elementName); 
    element.setAttribute("name", elementName); 
    element.setAttribute("type", "hidden"); 
    element.setAttribute("value", elementValue); 
    frmInput.appendChild(element); 
    return element; 
} 
 
/**
 * ����XMLHttpRequest����
 * 
 * @return
 */ 
function createXMLHttpRequest() {   
    if (window.ActiveXObject) {   
        xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');   
    } else if (window.XMLHttpRequest) {   
        xmlHttp = new XMLHttpRequest();   
    }   
} 
 
/**
 * urlָ����תҳ,data��Ҫpost�����ݡ�func�����ں���ָ��
 * 
 * @param url
 * @param data
 * @param func
 * @return
 */ 
function AjaxPost(url, data, func) { 
    var httpRequest = createHttpRequest(); 
    if (httpRequest) { 
        httpRequest.open("POST", url, true); 
        httpRequest.setRequestHeader("content-length", data.length); 
        httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
        httpRequest.send(data); 
 
        httpRequest.onreadystatechange = function() { 
            if (httpRequest.readyState == 4) { 
                try { 
                    if (httpRequest.status == 200) { 
                        if (func) { 
                            // ������Ե�����Ҫ�ĺ���  
                            func(httpRequest.responseText); 
                        } 
                    } 
                } catch (e) { 
                    alert("Error XMLHttpRequest!"); 
                } 
            } 
        } 
    } else { 
        alert("Error initializing XMLHttpRequest!"); 
    } 
} 
 
function vlstatInitLE(vlch, vlch1, vlch2, vlch3) { 
    var p; 
    var vlstatCH = vlch != null && vlch.length > 0 ? vlch : ""; 
    var vlstatCH1 = vlch1 != null && vlch1.length > 0 ? vlch1 : ""; 
    var vlstatCH2 = vlch2 != null && vlch2.length > 0 ? vlch2 : ""; 
    var vlstatCH3 = vlch3 != null && vlch3.length > 0 ? vlch3 : ""; 
	
    var vlstatCookieId = getStatId(); 
    var vlstatUA = encodeURIComponent(getUA()); 
    var vlstatIPAddress = document.localName; 
    var vlstatREFURL = encodeURIComponent(document.referrer); 
    var vlstatURL = encodeURIComponent(document.URL); 
    var vlstatScreenX = screen.width; 
    var vlstatScreenY = screen.height; 
    var vlstatOS = getPlatform(); 
    var vlstatBrower = getBrower(); 
    var vlstatBrowerLanguage = getBrowerLanguage(); 
    var vlstatPageTitle = encodeURIComponent(getPageTitle()); 
 
    var vlstatAction = "http://dev.sgfw.com.cn/account.php"; 
 
    p = "cookieId=" + vlstatCookieId + "&ua=" + vlstatUA + "&ip=" + vlstatIPAddress + "&refurl=" 
            + vlstatREFURL + "&url=" + vlstatURL + "&screenX=" + vlstatScreenX + "&screenY=" + vlstatScreenY 
            + "&os=" + vlstatOS + "&brower=" + vlstatBrower + "&browerLang=" + vlstatBrowerLanguage 
            + "&title=" + vlstatPageTitle + "&ch=" + vlstatCH + "&ch1=" + vlstatCH1 + "&ch2=" + vlstatCH2 
            + "&ch3=" + vlstatCH3; 
    var urlGo = vlstatAction + "?" + p; 
    createXMLHttpRequest(); 
    xmlHttp.open('GET', urlGo); 
    xmlHttp.send(null); 
}
vlstatInitLE();