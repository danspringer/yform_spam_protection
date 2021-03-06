<div id="<?= $this->getHTMLId() ?>">
    <label for="<?= $this->getFieldId() ?>"><?= $this->getLabel() ?></label>
    <input id="<?= $this->getFieldId() ?>"
        name="<?= $this->getFieldId() ?>" type="email"
        autocomplete="off" tabindex="-1">
    <input id="<?= $this->getFieldId() ?>_microtime"
        name="<?= $this->getFieldId() ?>_microtime" type="hidden"
        value="<?= microtime(true) ?>" readonly="readonly"
        tabindex="-1">
    <input id="<?= $this->getFieldId() ?>_js_enabled"
        name="<?= $this->getFieldId() ?>_js_enabled" type="hidden"
        value="0" readonly="readonly" tabindex="-1">
    <style>
        [id="<?=$this->getHTMLId() ?>"] {
            overflow: hidden;
            height: 1px;
            opacity: 100%;
        }
    </style>
    <script type="text/javascript">
        var date = new Date();
        document.getElementById("<?= $this->getFieldId() ?>_js_enabled").value =
            date.getFullYear();
    </script>
</div>