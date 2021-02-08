$("document").ready(function() {
    $(".item-list-element").click(folderSelected);
    $(".rename").click(folderRename);
}
);
function folderSelected () {
    $(".item-list-element").removeClass("selection");
    $(this).addClass("selection");
    alert('you click '+$(this).data('path'));
    $(".selection").data('path');
    $(".rename").attr('href', "index.php?pathToRename="+$(".selection").data('path')+"&rename=true");
};
function folderRename () {
    $(".input-newFolderName").focus();
};