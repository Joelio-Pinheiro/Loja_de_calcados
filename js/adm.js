document.querySelector('#btncadastrar').addEventListener('click', e =>{
    document.querySelector('#cadastro').style.display = 'block';
    document.querySelector('#editar').style.display = 'none';
    document.querySelector('#remover').style.display = 'none';
})
document.querySelector('#btneditar').addEventListener('click', e =>{
    document.querySelector('#cadastro').style.display = 'none';
    document.querySelector('#editar').style.display = 'block';
    document.querySelector('#remover').style.display = 'none';
})
document.querySelector('#btnremover').addEventListener('click', e =>{
    document.querySelector('#cadastro').style.display = 'none';
    document.querySelector('#editar').style.display = 'none';
    document.querySelector('#remover').style.display = 'block';
})
