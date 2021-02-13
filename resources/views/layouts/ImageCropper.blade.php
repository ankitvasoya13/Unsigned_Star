<div class="modal fade lang_ms_banner" id="ImageCropper_modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabel">Upload Profile Image</h5>
			</div>
			
			<div class="modal-body">
				<div class="img-container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="file" name="upload_image" class="orangeBtn" id="upload_image" style="width: 100%;" />
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div id="image-preview"></div>
							{{-- <span class="btn btn-success crop_image">Crop & Upload Image</span> --}}
						</div>
						{{-- <div class="col-md-4 col-sm-12 col-xs-12">
							<span class="btn btn-success crop_image">Crop & Upload Image</span>
						</div> --}}
					</div>
				</div>
			</div>
			
			<div class="modal-footer">
				<div class="tb_es_btn_wrapper">
				<button type="button" class="whiteBtn" data-dismiss="modal">Cancel</button>
				<button type="button" class="orangeBtn" id="crop">Crop</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('.profileImage').click(function(event){
alert('Hi!');
	$image_crop.croppie('result', {
      type:'canvas',
      size:'viewport'
    }).then(function(response){
      var _token = $('input[name=_token]').val();
      var id = $('input[name=id]').val();
      $.ajax({
        url:'{{ route("image_crop.upload") }}',
        type:'post',
        data:{"image":response, _token:_token, id:id},
        dataType:"json",
        success:function(data)
        {
          var crop_image = '<img src="'+data.path+'" />';
		  $('#uploaded_image').html(crop_image);
		  $("#ImageCropper_modal").modal('hide');
        }
      });
    });
  });
</script>