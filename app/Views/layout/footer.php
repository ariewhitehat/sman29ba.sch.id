<!-- End of Main -->
<!-- Footer Debug Information + Copyrights -->
<footer class="text-muted text-center">
    <div class="container">
        <p class="mb-1">
            &copy; Copyright <?= date('Y') ?> UPT SMAN 29 BANYUASIN | Develop by
            <a href="https://instagram.com/ariewhitehat" class="text-reset"><span class="text-danger"><i class="bi bi-instagram"></i></span> Samsul Bari</a>
        </p>
        <ul class="list-inline no-margin">
            <li class="list-inline-item">
                <a href="https://my.idcloudhost.com/aff.php?aff=4257" class="text-reset"><i class="bi bi-hdd-rack text-primary"></i> Server</a>
            </li>
            <li class="list-inline-item">
                <a href="https://opsekolah.com" class="text-reset"><i class="bi bi-megaphone text-warning"></i> Support</a>
            </li>
            <li class="list-inline-item">
                <a href="mailto:contact.samsulbari@gmail.com" class="text-reset"><i class="bi bi-bug text-danger"></i> Report Bug</a>
            </li>
            <li class="list-inline-item">
                <p>Page rendered in {elapsed_time} seconds</p>
            </li>
            <li class="list-inline-item">
                <p>Environment: <?= ENVIRONMENT ?></p>
            </li>
        </ul>
    </div>
</footer>
<!-- End of Footer-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('#modalPengumuman').modal('show');
        }, 600);
    });
</script>
</body>

</html>
<!-- Jayalah Indonesiaku  -->