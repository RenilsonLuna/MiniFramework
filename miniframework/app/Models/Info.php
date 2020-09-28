<?php  

namespace App\Models;
use MF\Model\Model;
class Info extends Model
{
	public function getInfos()
	{
		$query = "SELECT id, titulo, descricao FROM tb_info";
		$dados = $this->db->query($query)->fetchAll();
		return $dados;
	}
}

?>