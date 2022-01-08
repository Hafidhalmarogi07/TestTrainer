package com.training.demospringboot.services.impl;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.training.demospringboot.model.TodoModel;
import com.training.demospringboot.repository.RepositoryTodo;
import com.training.demospringboot.services.TodoServices;
@Service
public class TodoImpl implements TodoServices {

	@Autowired
	private RepositoryTodo repo;
//
	
	@Override
	public List<TodoModel> getAll() {
		// TODO Auto-generated method stub
		return repo.findAll();
	}

	@Override
	public void createData(TodoModel model) {
		// TODO Auto-generated method stub
		repo.save(model);
		
	}

	@Override
	public void deleteData(Long id) {
		repo.deleteById(id);
		
	}
	

	@Override
	public void updateData(TodoModel data) {
		repo.save(data);
		
	}

	@Override
	public Optional<TodoModel> findById(Long id) {
		// TODO Auto-generated method stub
		return repo.findById(id);
	}

	

}
