function tabuada() {
    var num = document.getElementById('txtn')
    var tab = document.getElementById('seltab')

    if(num.value == "") {
        alert('Digite um número!')
    } else {
        n = Number(num.value)
        c = 1
        tab.innerHTML = ''
        while(c <= 10) {
            var item = document.createElement('option')
            item.text = `${n} x ${c} = ${n*c}`
            item.value = `tab${c}`
            tab.appendChild(item)
            c++
        }
    }
}