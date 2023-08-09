"use strict"

let emAceEditor = ace.edit("code");
let editor      = emAceEditor;

// 函数：文章编辑界面全局快捷键 Ctrl（Cmd）+ S
document.addEventListener('keydown', function (e) {
    if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        e.preventDefault();
        // autosave(2);
    }
});

// 函数：编辑器整体覆盖式地插入代码
function inAce(code,type = 'html'){
    emAceEditor.getSession().setMode("ace/mode/" + type);
    emAceEditor.setValue(code);
    emAceEditor.gotoLine(0);
}

// 函数：获取编辑器里的代码
function getAce(){
    return emAceEditor.getValue();
}

// 函数：调试
function d(data){
    console.log(data)
}

// 函数：显示消息（渐变效果）
function alerts(msg){
    alertmsg.innerHTML = "消息：<span style='animation: fadeOut 5s forwards; opacity: 1;'>" + msg + "</span>";
}

// 函数：打开编辑器
function openmeditodal(listid){
    fetch('../content/plugins/websitejstool/control/control.php?act=getHtml&param=' + listid)
        .then(response => response.json())
        .then(data => {
            // d(data.content) 获取数据
            inAce(data.content);
            $("#mycodeedit-m").modal("show")
        } )
        .catch(error => console.error('Error:', error));
}


























window.onload = function(){
    testopennew.addEventListener("click", function(){  // 点 “打开文件”
        fetch('../content/plugins/websitejstool/control/control.php?act=getHtml')
            .then(response => response.json())
            .then(data => {
                // d(data.content) 获取数据
                inAce(data.content);
            } )
            .catch(error => console.error('Error:', error));
    }, false);

    testsavenew.addEventListener("click", function(){  // 点 “打开文件”
        let tempContent = getAce();
        fetch('../content/plugins/websitejstool/control/control.php?act=setHtml', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'writeHtml=' + getAce(),
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.msg)
            if(data.msg === 'ok'){
                alerts("保存成功");
            } else {
                alerts("内容不能为空")
            }
        })
        .catch((error) => {
            alerts("出错了");
        });
    }, false);

 }

