@extends('website.home')
@section('contents')

<style type="text/css">
	.calculatorsci{
	border:2px solid #ddd;
	width: 280px;
	box-sizing: border-box;
	margin: 110px auto 100px;
	padding-top: 150px;
	font-family: verdana;
}
</style>

<table class="calculatorsci table">
		<thead>			
			<tr>
				<td colspan=7>
					<div class="output form-group">
						<input type="text" class="ans form-control" readonly name="">
					</div>				
				</td>
			</tr>
		</thead>
		<tbody class="actions">		
			<tr>
				<td colspan=3></td>
				<td>
					<button class="btn btn-op" data-value='*('>(</button>				
					
				</td>
				<td>
					<button class="btn btn-op" data-value=')'>)</button>				
					
				</td>
				<td>
					<button class="btn btn-op" data-value='%'>%</button>			
					
				</td>
				<td>
					<button class="btn btn-op" data-value='ce'>CE</button>				
					
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-op" data-value='inv'>Inv</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='sin'>sin</button>			
				</td>
				<td>
					<button class="btn btn-op" data-value='ln'>ln</button>				
				</td>
				<td>
					<button class="btn" data-value='7'>7</button>
				</td>
				<td>
					<button class="btn" data-value='8'>8</button>				
				</td>
				<td>
					<button class="btn" data-value='9'>9</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='/'>&#x00f7;</button>				
					
				</td>
			</tr>			
			<tr>
				<td>
					<button class="btn btn-op" data-value='*3.14'>&pi;</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='cos'>cos</button>			
				</td>
				<td>
					<button class="btn btn-op" data-value='log'>log</button>				
				</td>
				<td>
					<button class="btn" data-value='4'>4</button>
				</td>
				<td>
					<button class="btn" data-value='5'>5</button>				
				</td>
				<td>
					<button class="btn" data-value='6'>6</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='*'>	&times;</button>
				</td>
			</tr>

			<tr>
				<td>
					<button class="btn btn-op" data-value='e'>e</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='tan'>tan</button>			
				</td>
				<td>
					<button class="btn btn-op" data-value='radic'>&radic;</button>				
				</td>
				<td>
					<button class="btn" data-value='3'>3</button>
				</td>
				<td>
					<button class="btn" data-value='2'>2</button>				
				</td>
				<td>
					<button class="btn" data-value='1'>1</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='-'>-</button>
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-op" data-value='exp'>EXP</button>			
				</td>
				<td>
					<button class="btn btn-op" data-value='x^2'>x&#xb2;</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='**'>x&#94;</button>		
				</td>
				<td>
					<button class="btn btn-op" data-value='.'>.</button>
				</td>
				<td>
					<button class="btn" data-value='0'>0</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='='>=</button>				
				</td>
				<td>
					<button class="btn btn-op" data-value='+'>+</button>
				</td>
			</tr>
		</tbody>
	</table>
@endsection


@section('footer-scripts')

<script type="text/javascript">
	const actions = document.querySelector('.actions');
	const ans = document.querySelector('.ans');
	console.log(actions);
	console.log(ans);
	let expression = '';
	let a=0;
	actions.addEventListener('click', (e) => {
		console.log(e.target);
		const value = e.target.dataset['value'];

		if(value !== undefined) {
			
			if(value == 'ce') {
				expression = '';
				ans.value = 0;
				return true;
			}
			else if(value == 'x^2'){
				expression =square();
			}
			
			else if(value == 'radic'){
				expression = Math.sqrt(expression);
			}
			else if(value == 'log'){
				expression = Math.log(expression);
			}
			else if(value == 'sin'){
				expression = Math.sin(expression);
			}
			else if(value == 'cos'){
				expression = Math.cos(expression);
			}
			else if(value == 'tan'){
				expression = Math.tan(expression);
			}

			else if(value == '=') {
				const answer = eval(expression);
				expression = answer;
				
			} else {
				expression += value;
			}

			if(expression == undefined) {
				expression = '';
				ans.value = 0;
			} else {
				ans.value = expression;
			}


		}

	});
	const square =()=> {
			return eval(expression*expression);
	}

</script>
@endsection