// O código será executado assim que o documento HTML for completamente carregado e pronto
$(document).ready(() => {
    // Quando o elemento com o ID 'documentacao' for clicado
    $('#documentacao').on('click', () => {
        // Carregar o conteúdo da página 'documentacao.html'
        $.get('documentacao.html', data => {
            $('#pagina').html(data);
        })
    })

    // Quando o elemento com o ID 'suporte' for clicado
    $('#suporte').on('click', () => {
        // Carregar o conteúdo da página 'suporte.html'
        $.post('suporte.html', data => {
            $('#pagina').html(data);
        })
    })
    //AJAX
    $('#competencia').on('change', (e) => {
        //VARIÁVEL QUE RECEBE A DATA
        let competencia = $(e.target).val();//'#competencia'

        //método, url, dados, success, error
        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`, //X-WWW-FORM-URLENCODED 
            dataType: 'json',
            success: (dados) => {
                $('#numero_vendas').html(dados.numero_vendas);
                $('#total_vendas').html(dados.total_vendas);
                //console.log(dados.numero_vendas, dados.total_vendas);
            },
            error: (erro) => {
                console.log(erro);
            }
        }
        )

    })
})


