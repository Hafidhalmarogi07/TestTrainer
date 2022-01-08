package com.training.demospringboot.repository;


import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.training.demospringboot.model.TodoModel;
@Repository
public interface RepositoryTodo extends JpaRepository<TodoModel, Long> {

}