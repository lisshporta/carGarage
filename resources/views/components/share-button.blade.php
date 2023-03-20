<button onclick="copyToClipboard('{{ url()->current() }}')"><i class="fa fa-share"></i> Share</button>

<script>
    function copyToClipboard(text) {
        var textarea = document.createElement("textarea");
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand("copy");
        document.body.removeChild(textarea);
    }
</script>
