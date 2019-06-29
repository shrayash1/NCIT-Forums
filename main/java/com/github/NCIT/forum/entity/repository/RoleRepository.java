/**
 * Created by Dawid Stankiewicz on 22.07.2016
 */
package com.github.NCIT.forum.entity.repository;

import com.github.NCIT.forum.entity.Role;
import org.springframework.data.jpa.repository.JpaRepository;


public interface RoleRepository extends JpaRepository<Role, Integer> {
    
    Role findByName(String name);
    
}
