package com.training.demospringboot.services.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.training.demospringboot.model.Karyawan;
import com.training.demospringboot.repository.RepositoryKaryawan;
import com.training.demospringboot.services.KaryawanServices;
@Service
public class KaryawanServiceImpl implements KaryawanServices {

	@Autowired
	private RepositoryKaryawan repoKaryawan;

	@Override
	public List<Karyawan> getAll() {
		// TODO Auto-generated method stub
		return repoKaryawan.findAll();
	}

}
