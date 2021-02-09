$("document").ready(function() {
    $(".item-list-element").click(folderSelected);
    $(".rename").click(folderRename);
}
);
function folderSelected () {
    $(".item-list-element").removeClass("selection");
    $(this).addClass("selection");
    alert('you click '+$(this).data('path')+' name: '+$(this).data('name'));
    $(".selection").data('path');
    $(".rename").attr('href', "index.php?pathToRename="+$(".selection").data('path')+"&fileToRename="+$(".selection").data('name')+"&rename=true");
    $(".delete").attr('href', "index.php?pathToDelete="+$(".selection").data('path')+"&delete=true");
};
function folderRename () {
    $(".input-newFolderName").focus();
};