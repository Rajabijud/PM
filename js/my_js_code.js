
    function resetFormAndReload() {
        // پیدا کردن المان‌های فرم با استفاده از ID آن‌ها
        var ramModelSelect = document.getElementById("ram_model");
        var hardModelSelect = document.getElementById("hard_model");
        
        // تنظیم مقدار همه المان‌های فرم به مقدار اولیه (all)
        ramModelSelect.value = "all";
        hardModelSelect.value = "all";
        
        // رفرش صفحه
        window.location.reload();
    }
