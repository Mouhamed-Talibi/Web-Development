document.addEventListener("DOMContentLoaded", function () {
    const toggler = document.getElementById("toggler-btn");
    const sidebar = document.getElementById("sidebar");
    
    toggler.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
    });

    // Handle dropdown functionality
    document.querySelectorAll(".has-dropwon").forEach(item => {
        item.addEventListener("click", function () {
            const isExpanded = this.getAttribute("aria-expanded") === "true";
            this.setAttribute("aria-expanded", !isExpanded);
        });
    });
});
