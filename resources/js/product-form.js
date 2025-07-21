// Se estás a usar AJAX para criar o produto
function createProduct(formData) {
    fetch('/api/products', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Redirecionar para a home com âncora para a seção produtos
            window.location.href = '/#produtos';
            // OU
            window.location.href = '/home#produtos';
        }
    })
    .catch(error => {
        console.error('Erro:', error);
    });
}