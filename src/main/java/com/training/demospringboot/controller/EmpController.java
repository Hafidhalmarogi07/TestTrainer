package com.training.demospringboot.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import com.training.demospringboot.model.Karyawan;
import com.training.demospringboot.services.KaryawanServices;

@Controller
public class EmpController {
	@Autowired
	public KaryawanServices serv;
	@GetMapping("/showKaryawan")
    public String getAllKaryawan(Model model) {
		var karyawan = (List<Karyawan>) serv.getAll();
        model.addAttribute("showKaryawan", karyawan);
		return "showKaryawan";
        
    }
//	@GetMapping("/")
//	public String hello() {
//		return"index";
//	}
}
