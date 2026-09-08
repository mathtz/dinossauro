document.addEventListener('DOMContentLoaded', () =>{
    const form = document.getElementById('form_cadastro');
    
    if(form){
        form.addEventListener('subimit', async function (e){
            e.preventDeFault();

            const dadoForm = new FormData(this);

            try{
                const resposta = await fetch('/projeto integrado/homepag/PHP/login.php', {
                    method: 'POST',
                    body: dadosForm
                });
                const resultado = await resposta.json();

                if(resultado.status === 'sucesso'){
                    const modalElemento = document.getElementById('meuModalBootstrap');
                    const instacioModal = bootstrap.Modal.getElementById(modalElemnento);
                    if(instacioModal) instacioModal.hide();

                    window.location.reload();

                } else{
                    alert('Erro: ' + resultado.mensagem);
                }

            }catch (erro){
                console.error('Erro na requisição: ',erro);
                alert('Erro ao enviar dados.')
            }
        })
    }
})