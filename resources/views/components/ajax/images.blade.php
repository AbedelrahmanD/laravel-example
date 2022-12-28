<div class="row">
    @foreach ($images as $image)
        <div class="col-12 col-md-4 my-3">
            <div class="card w-100">
                <img role="button" onclick="setSelectedImageModal(this)" data-bs-toggle="modal"
                    data-bs-target="#imageModal" style="height: 250px;object-fit:cover" loading="lazy"
                    src="{{ $image['webformatURL'] }}" class="card-img-top" alt="{{ $image['tags'] }}">
                <div class="card-body">
                    <p class="card-text">{{ $image['tags'] }}</p>
                    <a target="_blank" href="{{ $image['userImageURL'] }}" class="btn btn-info text-white">
                        {{ __('message.user_image') }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
