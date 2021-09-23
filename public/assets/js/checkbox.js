window.onload = () => {
    let activer = document.querySelectorAll(".quote")
    for (button of activer) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/quote/${this.dataset.id}`)
            xmhttp.send()
        })
    }
    let test = document.querySelectorAll(".maclass2")
    for (button of test) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/test/${this.dataset.test}`)
            xmhttp.send()
        })
    }
}