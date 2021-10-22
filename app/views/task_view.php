      <div class="row marketing">
        <div class="col-lg-12">


<?php  if ($this->data['db']==0){ ?>

          <div class="alert alert-danger alert-dismissible" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Не удалось </strong>подключить к БД.
          </div>

<?php }; ?>

<?php  if($this->data['add']==1){ ?>

          <div class="alert alert-success alert-dismissible" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Новая запись</strong> успешно добавлена.
          </div>

<?php }; ?>

<?php  if($this->data['add']==-1){ ?>

          <div class="alert alert-danger alert-dismissible" id="myAlert">
            <a href="#" class="close">&times;</a>
            <strong>Новая запись</strong> не создана.
          </div>

<?php }; ?>

          <h4>Задачник</h4>

<?php  if(count($this->data['data']) < 1){ ?>
		  
          <div class="jumbotron">
            <p class="lead">В задачнике пока пусто. Добавьте новые данные в форме ниже, что бы увидеть результат.</p>
          </div>
		  
<?php }; ?>





<?php  if(count($this->data['data']) > 0){ ?>
		  
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Сортировка
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li <?php if($this->data['sort']==1 ){ echo 'class="active"'; }; ?>><a href="?sort=1">По имени</a></li>
              <li <?php if($this->data['sort']==2 ){ echo 'class="active"'; }; ?>><a href="?sort=2">По email</a></li>
              <li <?php if($this->data['sort']==3 ){ echo 'class="active"'; }; ?>><a href="?sort=3">По статусу</a></li>
            </ul>
          </div>

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Задача</h4>
                </div>
                <div class="modal-body">

                  <form action="" method="post" id="my_modal_form">
                    <p>Задача #<span id="modaltaskid"></span>:</p>
                    <textarea class="form-control" id="modaltasktext" name="modaltasktext"></textarea>
                  </form>
					
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default ok-modal" data-dismiss="modal" >OK</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
      
            </div>
          </div>

    <h4>Добавление новой задачи</h4>
    <p>Введите данные и нажмите кнопку [добавить].</p>

    <form action="/task" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="uname">Имя:</label>
            <input type="text" class="form-control" id="uname" placeholder="Введите имя..." required="true" name="uname">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Введите email..." required="true" name="email">
        </div>
        <div class="form-group">
            <label for="tasktext">Задача:</label>
            <textarea class="form-control" id="tasktext" placeholder="Введите задачу..." required="true" name="tasktext"></textarea>
        </div>

        <button type="submit" class="btn btn-default">Добавить</button>
    </form>


    
          <table class="table table-striped">
            <thead>
              <tr>
				<th>Выполнение</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Задача</th>
                <th>Статус</th>
              </tr>
            </thead>
            <tbody>

<?php 
	// вывод списка задач
	foreach($this->data['data'] as $row)
	{
		// проверка статуса
		if($row['st']){
			$row['st'] = 'checked';
		}else{
			$row['st'] = '';
		};
        // проверка на редактированние админом

        if(isset($row['adm']) ){
            $row['adm'] = 'Checked admin';
        }else{
            $row['adm'] = '1';
        };

		
		// проверка режима админа
		$dis = 'disabled';
		$edit = '';
		if($this->data['admin']==1){ 
			$dis = ''; 
			$edit = '<button type="button" class="btn btn-default my-btn'.$row['id'].'" value="'.$row['id'].'">Изменить</button>';
		};
		

		
		echo '<tr>
				<td><input class="my-checkbox" type="checkbox" '.$dis.' '.$row['st'].' value="'.$row['id'].'"></td>
                <td>'.htmlspecialchars($row['uname']).'</td>
                <td>'.htmlspecialchars($row['email']).'</td>
                <td>'.$edit.' <span data-id="'.$row['id'].'">'.htmlspecialchars($row['tasktext']).'</span></td>
                <td>'.htmlspecialchars($row['adm']).'</td>
               </tr>';
	};
?>			

            </tbody>
          </table>

<?php
	// пагинация
	if( $this->data['page_count']>1 ){
		echo('<ul class="pagination">');
		for($i=1;$i<=$this->data['page_count'];$i++){
			$active = '';
			if($this->data['page']==$i){
				$active = 'class="active"';
			};
			echo('<li '.$active.'><a href="?page='.$i.'">'.$i.'</a></li>');
		};
		echo('</ul>');
	};
};

 ?>

        </div>
      </div>
