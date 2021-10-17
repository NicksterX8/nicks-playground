
function includeFile(src, id, divtype, section) {
    if (divtype == undefined) {
        divtype = "div"
    }
    let target = document.createElement(divtype)
    target.id = id
    if (section == "head") {
        document.head.appendChild(target)
    } else {
        document.body.appendChild(target)
    }
    $(function(){ $("#" + id).load(src); });
}
