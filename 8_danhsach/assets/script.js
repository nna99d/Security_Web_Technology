document.addEventListener('DOMContentLoaded', function() {
    const selectAllCheckbox = document.getElementById('selectAll');
    const rowCheckboxes = document.querySelectorAll('.row-checkbox');
    const rows = document.querySelectorAll('tbody tr');

    selectAllCheckbox.addEventListener('change', function() {
        rowCheckboxes.forEach(checkbox => {
            checkbox.checked = selectAllCheckbox.checked;
            toggleHighlight(checkbox);
        });
    });

    rowCheckboxes.forEach((checkbox, index) => {
        checkbox.addEventListener('change', function() {
            toggleHighlight(checkbox);
            checkSelectAllStatus();
        });

        rows[index].addEventListener('click', function() {
            checkbox.checked = !checkbox.checked;
            toggleHighlight(checkbox);
            checkSelectAllStatus();
        });
    });

    function toggleHighlight(checkbox) {
        const row = checkbox.closest('tr');
        if (checkbox.checked) {
            row.classList.add('highlight');
        } else {
            row.classList.remove('highlight');
        }
    }
    
    function checkSelectAllStatus() {
        const allChecked = Array.from(rowCheckboxes).every(checkbox => checkbox.checked);
        selectAllCheckbox.checked = allChecked;
    }
});
