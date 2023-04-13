<div class="container">
	
	<table class="table mt-5" style="width:100%;text-align: center;">
		    <thead>
		        <tr>
		            <th style="border: 1px solid;">#</th>
		            <th style="border: 1px solid;">Title</th>
		            <th style="border: 1px solid;">Img</th>
		            <th style="border: 1px solid;">Text</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<?php $i =1;?>
		        @foreach ($posts as $post)
		        <tr>
		            <td style="border: 1px solid;"><?=$i++?></td>
		            <td style="border: 1px solid;">{{ $post->title }}</td>
		            <td style="border: 1px solid;"><img src="{{ $post->img }}" width="100"></td>
		            <td style="border: 1px solid;">{{ $post->body }}</td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>

</div>