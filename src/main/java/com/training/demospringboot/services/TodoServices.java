package com.training.demospringboot.services;

import java.util.List;
import java.util.Optional;

import com.training.demospringboot.model.TodoModel;

public interface TodoServices {	
	List<TodoModel> getAll();
	public void createData(TodoModel data);
	public Optional<TodoModel> findById(Long id);
	public void updateData(TodoModel data);
	public void deleteData(Long id);


	
	
	
	
	
}
