package com.training.demospringboot.repository;


import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.training.demospringboot.model.Karyawan;
@Repository
public interface RepositoryKaryawan extends JpaRepository<Karyawan, Long> {

}