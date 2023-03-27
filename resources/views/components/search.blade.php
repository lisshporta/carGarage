<form action="/">
    <div style="display: flex; align-items: center;">
        <input
            type="text"
            name="search"
            id="searchInput"
            style="margin-left:10px"
            placeholder="Search Desired Car..."
            class="border-2 border-black rounded"
        />
        <div style="display: flex; align-items: center; justify-content: center; width: 22px; height: 22px; border: 1px solid #c8ccd0; border-radius: 3px; margin-left: 5px;">
            <div style="color: #586069; font-size: 12px;">/</div>
        </div>
    </div>
</form>

<script>
    document.addEventListener('keydown', function(event) {
        if (event.key === '/') {
            event.preventDefault();
            document.getElementById('searchInput').focus();
        }
    });
</script>
