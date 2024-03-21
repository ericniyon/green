@php(
    $banner = \App\Model\Banner::inRandomOrder()->where(['published' => 1, 'banner_type' => 'Popup Banner'])->first()
)
@if (isset($banner))
    <div class="modal fade" id="popup-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0 __p-1px">
                    <button type="button" class="close __close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body cursor-pointer __p-3px" onclick="location.href='{{ $banner['url'] }}'">
                    <img class="d-block w-100"
                        onerror="this.src='https://res.cloudinary.com/dxuoorngr/image/upload/v1710758318/image-place-holder_cdnntk.png'"
                        src="{{ asset('storage/banner') }}/{{ $banner['photo'] }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endif
