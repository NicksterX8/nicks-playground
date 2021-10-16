
function includeFile(src, id) {

    $(function(){ $("#" + id).load("src"); });

    d = document.createElement('div');
    d.setAttribute("id", id);
}

function foo() {
    console.log("foo")
    d = document.createElement('div')
    d.innerHTML = "foo"
    document.body.appendChild(d)
    return "foo return"
}
