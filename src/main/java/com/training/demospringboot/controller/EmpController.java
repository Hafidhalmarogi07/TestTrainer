package com.training.demospringboot.controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

import com.training.demospringboot.model.TodoModel;
import com.training.demospringboot.services.TodoServices;

@Controller
public class EmpController {
	@Autowired
	public TodoServices serv;
	@GetMapping("/")
	@RequestMapping(value="/", method = {  RequestMethod.POST, RequestMethod.GET })
    public String index(Model model) {
		var todo = (List<TodoModel>) serv.getAll();
        model.addAttribute("todo", todo);
		return "showtodo";
    }
	@GetMapping("/showtodo")
	@RequestMapping(value="/showtodo", method = {RequestMethod.POST, RequestMethod.GET, })
    public String getData(Model model) {
		var todo = (List<TodoModel>) serv.getAll();
        model.addAttribute("todo", todo);
		return "showtodo";
    }
	@PostMapping("/createdata")
	@RequestMapping(value="/createdata", method = { RequestMethod.GET, RequestMethod.POST })
	public String createData( @ModelAttribute("todo") TodoModel todo,Model model) {
		serv.createData(todo);
        model.addAttribute("todo");
		return "redirect:showtodo";
    }
	@DeleteMapping("/deletedata/{id}")
	@RequestMapping(value="/deletedata/{id}", method = { RequestMethod.GET, RequestMethod.POST })
    public String DeleteData(@PathVariable("id") long id,RedirectAttributes redirectAttributes) {
		serv.deleteData(id);
		return "redirect:/";
    }
	@PostMapping("/updatedata/{id}")
	@RequestMapping(value="/updatedata/{id}", method = { RequestMethod.GET, RequestMethod.POST })
    public String updateData(@ModelAttribute("todo") TodoModel todo,BindingResult result,@PathVariable("id") long id ,RedirectAttributes redirectAttributes) {
		Optional<TodoModel> model = serv.findById(id);
		model.get().setId(todo.getId());
		model.get().setDeskripsi(todo.getDeskripsi());
		serv.updateData(todo);
		return "updatedata";
    }

}
 