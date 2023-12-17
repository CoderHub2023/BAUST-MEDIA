function likePost(postId) {
    $.ajax({
        type: 'POST',
        url: '{{ route("likePost") }}',
        data: {
            postId: postId,
            _token: '{{ csrf_token() }}',
        },
        success: function(data) {
            $('#like-count-' + postId).text(data.likes);
        },
    });
}
