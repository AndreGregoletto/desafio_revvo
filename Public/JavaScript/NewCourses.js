$(document).ready(function () {
    $('#create-course-button').click(function () {
        let isValid = true

        $('#course-form input, #course-form textarea').each(function () {
            const field = $(this)

            if (!field.val() || (field.is('input[type="file"]') && field[0].files.length === 0)) {
                isValid = false
                field.addClass('is-invalid')
            } else {
                field.removeClass('is-invalid')
            }
        })

        if (!isValid) {
            e.preventDefault();
            return
        }
        $('#course-form').submit();
        // createCourse()
    })

    $('#course-form input, #course-form textarea').on('input change', function () {
        $(this).removeClass('is-invalid')
    })
})

function createCourse() {
    const formData = new FormData($('#course-form')[0]); // Captura os dados do formulário, incluindo arquivos
    const url = "http://localhost/desafio_revvo_3/Controller/CursosController.php?action=create"

    $.ajax({
        url: url, // Caminho da controller
        type: "POST",
        data: formData,
        processData: false, // Evita que o jQuery processe os dados
        contentType: false, // Evita que o jQuery configure automaticamente o cabeçalho Content-Type
        success: function (response) {
            // Exibe uma mensagem de sucesso e limpa o formulário
            alert("Curso criado com sucesso!");
            $('#course-form')[0].reset(); // Limpa o formulário
            $('.is-invalid').removeClass('is-invalid'); // Remove validações pendentes
            $('#exampleModal').modal('hide'); // Fecha o modal
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
            alert("Ocorreu um erro ao criar o curso. Por favor, tente novamente.");
        }
    });
}