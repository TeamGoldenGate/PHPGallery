
var counter = 0;

function addClone(main) {
    var newDiv = document.createElement('div');
    newDiv.id = 'newpic_' + counter + '';
    newDiv.innerHTML = '' +
        '<input type="text" name="picturename[]" placeholder="Picture Name"/>'+
        '<input type="file" name="picture[]" id="uploadImage_' + counter + '"  onchange="PreviewImage(this);"/>'+
        '<a href="#nogo">'+
        '<img src="" id="uploadPreview_' + counter + '" onClick="removeClone(this, \'newpic\', \'addpic\')"/>'+
        '</a>';
    document.getElementById(main).appendChild(newDiv);
    counter++;
}

function removeClone(sender, idclone, main) {
    var tr = sender.parentNode.parentNode;
    var id = tr.getAttribute('id');
    if (id != idclone) {
        var element = document.getElementById(id);
        document.getElementById(main).removeChild(element);
    }
}

function PreviewImage(sender) {
    var oFReader = new FileReader();
    var newpic = sender.parentNode;
    var id = newpic.getAttribute('id');
    var arr = id.split("_");

    var num = arr[1];
    oFReader.readAsDataURL(document.getElementById("uploadImage_" + num + "").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview_" + num + "").src = oFREvent.target.result;
    };
};


window.onload = function() {
    //addClone('addpic');
}