function contar() {
    var inicio = document.getElementById('txti')
    var fim = document.getElementById('txtf')
    var passo = document.getElementById('txtp')
    var res = document.getElementById('res')

    if (inicio.value == 0 || fim.value == 0 || passo.value == 0) {
        res.innerHTML = 'Impossível contar.'
      //  alert('[ERRO] Faltam dados')
    } else {
        res.innerHTML = 'Contando: <br>'
        var i = Number(inicio.value)
        var f = Number(fim.value)
        var p = Number(passo.value)
        if(p <= 0) {
            alert('[PASSO INVÁLIDO] Considerando passo: 1')
            p = 1
        }

        if (i < f) {
            //contagem crescente
            for(var c = i ; c <= f ; c += p) {
                res.innerHTML += ` ${c} \u{1F449} `
            }

        } else {
            //contagem regressiva
            for(var c = i; c >= f; c -= p) {
                res.innerHTML += `${c} \u{1F449} `
            }
        }
        res.innerHTML += `\u{1F3c1}`
    }
}