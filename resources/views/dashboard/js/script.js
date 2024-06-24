document.addEventListener('DOMContentLoaded', () => {
    const employeeMenu = document.getElementById('employeeMenu');
    const ownerMenu = document.getElementById('ownerMenu');

    setTimeout(() => {
        employeeMenu.style.opacity = '1';
        employeeMenu.style.transform = 'translateY(0)';
    }, 100);

    setTimeout(() => {
        ownerMenu.style.opacity = '1';
        ownerMenu.style.transform = 'translateY(0)';
    }, 400);
});
