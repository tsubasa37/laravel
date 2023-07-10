

// $(document).ready(function() {
//             $('.favorite-toggle').click(function() {
//                 var productId = $(this).data('product-id');
//                 var url = "{{ route('user.favorite.toggle', ':id') }}".replace(':id', productId);
//                 $.ajax({
//                     headers: {
//                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                     },
//                     url: url,
//                     type: 'POST',
//                     success: function(response) {
//                         if (response.favorited) {
//                             $(this).find('i').removeClass('far').addClass('fas');
//                         } else {
//                             $(this).find('i').removeClass('fas').addClass('far');
//                         }
//                     }
//                 });
//             });
//         });



        // $(function() {
        // $('.favorite-toggle').on('click', function() {
        //     var $icon = $(this).find('i');
        //     var productId = $(this).data('product-id');
        //     var url = "{{ route('user.favorite.toggle', ':id') }}".replace(':id', productId);

        //     // Ajaxリクエスト
        //     $.ajax({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     url: url,
        //     method: 'POST',
        //     data: {
        //         product_id: productId
        //     },
        //     success: function(response) {
        //         // お気に入りの状態に応じてアイコンを切り替える
        //         // $icon.toggleClass('fas far');
        //         if (response.favorited) {
        //             $(this).find('i').removeClass('far').addClass('fas');
        //         } else {
        //             $(this).find('i').removeClass('fas').addClass('far');
        //         }
        //     },
        //     error: function() {
        //         console.log('Ajaxリクエストが失敗しました');
        //     }
        //     });
        // });
        // });