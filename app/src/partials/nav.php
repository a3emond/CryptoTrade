<ul>
    <li><a href="home" class="spa-link">Home</a></li>
    <li><a href="about" class="spa-link">About</a></li>
    <li><a href="contact" class="spa-link">Contact</a></li>
</ul>

<!-- Temporary Script for Dynamic Content loadinf -->
<script> 
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".spa-link").forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            let route = this.getAttribute("href");
            history.pushState(null, "", "/" + route);

            // Load content dynamically
            fetch("index.php?route=" + route)
                .then(response => response.text())
                .then(data => {
                    // Extract only the .main-content part from the response
                    let parser = new DOMParser();
                    let doc = parser.parseFromString(data, "text/html");
                    let newContent = doc.querySelector(".main-content").innerHTML;

                    document.querySelector(".main-content").innerHTML = newContent;
                });
        });
    });
});

</script>
