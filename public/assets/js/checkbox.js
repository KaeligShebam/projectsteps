window.onload = () => {
    let customerbrief = document.querySelectorAll(".customerbrief")
    for (button of customerbrief) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/brief-client/${this.dataset.customerbrief}`)
            xmhttp.send()
        })
    }
    let comingsoon = document.querySelectorAll(".comingsoon")
    for (button of comingsoon) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/coming-soon/${this.dataset.comingsoon}`)
            xmhttp.send()
        })
    }

    let customercontentreception = document.querySelectorAll(".customercontentreception")
    for (button of customercontentreception) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/reception-contenu-client/${this.dataset.customercontentreception}`)
            xmhttp.send()
        })
    }

    let picturesreception = document.querySelectorAll(".picturesreception")
    for (button of picturesreception) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/reception-des-photos/${this.dataset.picturesreception}`)
            xmhttp.send()
        })
    }

    let webdesignprogress = document.querySelectorAll(".webdesignprogress")
    for (button of webdesignprogress) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/maquette-en-cours/${this.dataset.webdesignprogress}`)
            xmhttp.send()
        })
    }

    let webdesignwait = document.querySelectorAll(".webdesignwait")
    for (button of webdesignwait) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/maquette-en-attente/${this.dataset.webdesignwait}`)
            xmhttp.send()
        })
    }

    let webdesignvalidated = document.querySelectorAll(".webdesignvalidated")
    for (button of webdesignvalidated) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/maquette-validee/${this.dataset.webdesignvalidated}`)
            xmhttp.send()
        })
    }

    let domainname = document.querySelectorAll(".domainname")
    for (button of domainname) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/nom-de-domaine/${this.dataset.domainname}`)
            xmhttp.send()
        })
    }

    let webintegration = document.querySelectorAll(".webintegration")
    for (button of webintegration) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/integration/${this.dataset.webintegration}`)
            xmhttp.send()
        })
    }

    let webtraining = document.querySelectorAll(".webtraining")
    for (button of webtraining) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/etapes-projets/formation/${this.dataset.webtraining}`)
            xmhttp.send()
        })
    }
}