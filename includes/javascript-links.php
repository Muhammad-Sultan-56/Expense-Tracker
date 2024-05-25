<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/popper.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>



<script src="assets/js/app.js"></script>




<script>
    $(document).ready(function() {
        $('.datatable').DataTable();
    });

    let notification = document.getElementById("notification");
    if (notification) {
        setTimeout(() => {
            notification.style.display = "none";
        }, 3000);
    }
</script>