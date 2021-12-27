package com.training.demospringboot.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "karyawan")
public class Karyawan {
	
	public String Nama ;
	public String NIK;
	public String gaji;
	public String id;
    @Column(name = "nama", nullable = false)
	public String getNama() {
		return Nama;
	}
	
	public void setNama(String nama) {
		Nama = nama;
	}
    @Column(name = "nik", nullable = false)
	public String getNIK() {
		return NIK;
	}
	public void setNIK(String nIK) {
		NIK = nIK;
	}
    @Column(name = "gaji", nullable = false)

	public String getGaji() {
		return gaji;
	}
	public void setGaji(String gaji) {
		this.gaji = gaji;
	}
	@Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
	public String getId() {
		return id;
	}
	public void setId(String id) {
		this.id = id;
	}

}
