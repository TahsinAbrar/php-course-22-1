<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="text/javascript">
    const nav = document.querySelector("nav");
    window.addEventListener("scroll", function() {
        if (window.pageYOffset > 35) {
            nav.classList.add("bg-dark", "shadow");
        } else {
            nav.classList.remove("bg-dark", "shadow");
        }
    });
</script>

@yield('scripts')