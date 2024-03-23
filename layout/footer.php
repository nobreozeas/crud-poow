
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        const btn_excluir = document.querySelectorAll('.btn_excluir');
        btn_excluir.forEach(btn => {
            btn.addEventListener('click', function(e){
                e.preventDefault();
                const id = this.getAttribute('data-id');
                Swal.fire({
                    title: 'Deseja realmente excluir?',
                    text: "Você não poderá reverter isso!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim, excluir!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `./actions/excluir.php?id=${id}`;
                    }
                })
            })
        });
    })
</script>


</body>

</html>