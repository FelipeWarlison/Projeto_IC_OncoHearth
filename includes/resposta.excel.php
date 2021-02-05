    
<?php
require "database\db.dashboard.php";

    $sql = "SELECT * FROM questionarios WHERE questId=?;";
    $stmt = mysqli_query($conn, $sql);
    $sql = mysqli_fetch_assoc($stmt);
    
    // Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';

		$html .= '<tr>';
		$html .= '<th align=center colspan="3">LAUDO DA ESCALA DE SONOLÊNCIA DE EPWORTH (ESS-BR)</tr>';
		$html .= '</tr>';

		$html .= '<tr>
                   <th align=left colspan="3">Paciente: '.$sql["pessoa"].'<\th>
		          </tr>';

		$html .= '<tr>
                   <th align=left colspan="3">Idade: '.$sql["idade"].'<\th>
		          </tr>';

		$html .= '<tr>
                   <th align=left colspan="3">Data do Exame: '.$sql["data"].'<\th>
		          </tr>';
		
		$html .= '<tr>
		           <th colspan="2" scope="row">Probabilidade</th>
		           <th scope="row">Conclusão</th>
		          </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Sentando e lendo</th>
                    <td>'.$sql["essbr1"].'</td>
		          </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Assistindo TV</th>
                    <td>'.$sql["essbr2"].'</td>
		          </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Sentado, quieto, em um lugar público por exemplo: (teatro, reunião, palestra, etc...)</th>
		            <td>'.$sql["essbr3"].'</td>
		            </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Andando de carro por uma hora sem parar, como passageiro</th>
		            <td>'.$sql["essbr4"].'</td>
		          </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Ao deitar-se à tarde para descansar, quando possível</th>
		            <td>'.$sql["essbr5"].'</td>
		          </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Sentado conversando com alguém</th>
		            <td>'.$sql["essbr6"].'</td>
		          </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Sentado quieto após o almoço sem bebida alcoólicas</th>
		            <td>'.$sql["essbr7"].'</td>
		          </tr>';
		$html .= '<tr>
		            <th colspan="2" scope="row">Em um carro parado no trânsito por alguns minutos</th>
		            <td>'.$sql["essbr7"].'</td>
		           </tr>';
		  
        $html .= '</table>';

 ?>