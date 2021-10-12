window.onload = () => {
    let customerbrief = document.querySelectorAll(".customerbrief")
    for (button of customerbrief) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/brief-client/${this.dataset.customerbrief}`)
            xmhttp.send()
        })
    }
    let comingsoon = document.querySelectorAll(".comingsoon")
    for (button of comingsoon) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/coming-soon/${this.dataset.comingsoon}`)
            xmhttp.send()
        })
    }

    let customercontentreception = document.querySelectorAll(".customercontentreception")
    for (button of customercontentreception) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/reception-contenu-client/${this.dataset.customercontentreception}`)
            xmhttp.send()
        })
    }

    let picturesreception = document.querySelectorAll(".picturesreception")
    for (button of picturesreception) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/reception-des-photos/${this.dataset.picturesreception}`)
            xmhttp.send()
        })
    }

    let webdesignprogress = document.querySelectorAll(".webdesignprogress")
    for (button of webdesignprogress) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/maquette-en-cours/${this.dataset.webdesignprogress}`)
            xmhttp.send()
        })
    }

    let webdesignwait = document.querySelectorAll(".webdesignsend")
    for (button of webdesignwait) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/maquette-envoyee/${this.dataset.webdesignsend}`)
            xmhttp.send()
        })
    }

    let webdesignvalidated = document.querySelectorAll(".webdesignvalidated")
    for (button of webdesignvalidated) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/maquette-validee/${this.dataset.webdesignvalidated}`)
            xmhttp.send()
        })
    }

    let domainname = document.querySelectorAll(".domainname")
    for (button of domainname) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/nom-de-domaine/${this.dataset.domainname}`)
            xmhttp.send()
        })
    }

    let webintegration = document.querySelectorAll(".webintegration")
    for (button of webintegration) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/integration/${this.dataset.webintegration}`)
            xmhttp.send()
        })
    }

    let webtraining = document.querySelectorAll(".webtraining")
    for (button of webtraining) {
        button.addEventListener("click", function () {
            let xmhttp = new XMLHttpRequest;
            xmhttp.open("get", `/admin/projets-clients/formation/${this.dataset.webtraining}`)
            xmhttp.send()
        })
    }
}