FilePond.registerPlugin(FilePondPluginFileEncode, FilePondPluginFileValidateSize, FilePondPluginImageExifOrientation, FilePondPluginImagePreview);
var inputMultipleElements = document.querySelectorAll("input.filepond-input-multiple");
inputMultipleElements && (Array.from(inputMultipleElements).forEach(function (e) {
    FilePond.create(e)
}), FilePond.create(document.querySelector(".filepond-input-circle"), {
    labelIdle: 'Drag & Drop your picture or <span class="filepond--label-action">Browse</span>',
    imagePreviewHeight: 170,
    imageCropAspectRatio: "1:1",
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    stylePanelLayout: "compact circle",
    styleLoadIndicatorPosition: "center bottom",
    styleProgressIndicatorPosition: "right bottom",
    styleButtonRemoveItemPosition: "left bottom",
    styleButtonProcessItemPosition: "right bottom"
}));
