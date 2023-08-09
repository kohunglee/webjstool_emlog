<?php
!defined('EMLOG_ROOT') && exit('error');

function plugin_setting_view(){
    $st_ver = "001";
?>
<style>
#alertmsg {
    height: 26px
}
@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}

@media all and (min-width: 991px) {
    .row {
        display: block;
    }
}

</style>




<div id="alertmsg">
    消息：<span style='animation: fadeOut 5s forwards; opacity: 1;'></span>
</div>

<a href="javascript:void(0);" id="testopennew">点我打开</a>
<a href="javascript:void(0);" id="testsavenew">保存</a>
<a id='openthemodal' class='btn btn-Link' data-toggle='modal' data-target='#mycodeedit-m'>打开模态框</a>

<div style="margin-top: 1em;">
    <div>网页足部</div>
    <div>
        <a href="javascript:void(0);" id="editcode" onclick="openmeditodal('test01')">编辑</a>
        <a href="javascript:void(0);" id="removeonelist" onclick="removeonelist('test01')" value="001">删除</a>
    </div>
</div>

<div style="margin-top: 1em;">
    <div>文章足部</div>
    <div>
        <a href="javascript:void(0);">编辑</a>
        <a href="javascript:void(0);">删除</a>
    </div>
</div>


<!-- 模态框（Modal） -->
<div class="modal fade" id="mycodeedit-m" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="padding: 2em 2em 0 2em;">
            <div class="mycodeedit-c" >
                <label for="doactionselect">项目名字：</label>
                <input type="text" class="form-control" id="listonename" placeholder="请输入名称">
                <br>
                <!-- 挂载点选择 -->
                <label for="doactionselect">选择挂载点：</label>
                <select class="form-control" id="doactionselect">
                    <option>-- 请选择 --</option>
                    <option value="index_footer">前台网页足部区域（index_footer）</option>
                    <option value="adm_main_top">后台首页顶部区域（adm_main_top）</option>
                </select>
                <!-- ./挂载点选择 -->
                <div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭编辑器</button>
                </div>
                <div>
                    <pre id="code" class="ace_emAceEditor" style="min-height:calc(100vh - 180px)"></pre>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<!-- 导入 ace 编辑器的 js 库 -->
<script src="../content/plugins/websitejstool/ace/ace.js?v=<?= $st_ver ?>" type="text/javascript" charset="utf-8"></script> 
<script src="../content/plugins/websitejstool/ace/ext-language_tools.js?v=<?= $st_ver ?>" type="text/javascript" charset="utf-8"></script>
<!-- 导入插件的 js -->
<script src="../content/plugins/websitejstool/js/websitejstool.js?v=<?= $st_ver ?>" type="text/javascript" charset="utf-8"></script>

<?php } ?>
