<div class="modal fade create-new-quiz-modal" id="createNewQuizModal" tabindex="-1" role="dialog" aria-labelledby="createNewQuizLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title" id="createNewQuizLabel">
					Create New Quiz
				</h4>
			</div>

			<div class="modal-body">
				<form action="/manage/quizzes" method="POST">
					{{csrf_field()}}
				</form>
			</div>

		</div>
	</div>
</div>