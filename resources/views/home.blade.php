@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">


			<div class="col-md-5">
				<div class="box">
          <div class="box-header">
            <h3 class="box-title">Top Scores Doodle Jump</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <table class="table table-striped">
              <tbody>
								<tr>
                <th style="width: 10px">#</th>
                <th>Player</th>
                <th>Score</th>
              </tr>
							<?php $position = 0; ?>
							@foreach($scoresDoodle as $score)
							@if($score->game_id == 1)
              <tr>
								<td><?php echo $position ?></td>
                <td>{{ $score -> user_id}}</td>
                <td>{{ $score -> score}}</td>
              </tr>
							<?php $position += 1; ?>
							@endif
							@endforeach
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
			</div>

<!--/////////////////-->

			<div class="col-md-5">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Top Scores Infinite Runner</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<table class="table table-striped">
							<tbody>
								<tr>
								<th style="width: 10px">#</th>
								<th>Player</th>
								<th>Score</th>
							</tr><?php $position = 0; ?>
							@foreach($scoresRunner as $score)
							@if($score->game_id == 2)
							<tr>
								<td><?php echo $position ?></td>
								<td>{{ $score -> user_id}}</td>
								<td>{{ $score -> score}}</td>
							</tr>
							<?php $position += 1; ?>
							@endif
							@endforeach
						</tbody></table>
					</div>
					<!-- /.box-body -->
				</div>
			</div>

		</div>
	</div>
@endsection
