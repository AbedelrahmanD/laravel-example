@extends('layout')
@section('body')
    <button onclick="changeLanguage('{{ Config::get('otherLang') }}')"
        class="btn btn-danger">{{ __('message.change_language') }}</button>
    <form onsubmit="searchImages()" class="col-10 col-md-6 m-auto my-3">
        <input placeholder="{{ __('message.search') }}" class="form-control" type="text" name="search" id="search">
    </form>
    <div id="jsImagesContainer" class="container shadow rounded my-2 p-5">

    </div>


    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <img src="#" id="jsImageModal">
                </div>

            </div>
        </div>
    </div>


    <script>
        $(function() {
            getImages();
        })

        function setSelectedImageModal(image) {
            $("#jsImageModal").attr("src", $(image).attr("src"))
        }

        function searchImages() {
            event.preventDefault();
            getImages($("#search").val());
        }

        function getImages(search = "") {
            $("#jsImagesContainer").html(spinner);
            $.get(`/components/ajax/images?search=${search}&lang=${window.lang}`, function(html) {
                $("#jsImagesContainer").html(html);
            });
        }

        function spinner() {
            return `<div class="d-flex justify-content-center">
                        <div class="spinner-border text-primary"></div>
                    </div>`;
        }

        function changeLanguage(otherLang) {
            var searchParams = new URLSearchParams(window.location.search);
            searchParams.set("lang", otherLang);
            window.location.search = searchParams.toString();
        }
    </script>
@endsection
