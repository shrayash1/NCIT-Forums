/**
 * Created by Dawid Stankiewicz on 18.07.2016
 */
package com.github.NCIT.forum.entity.repository;

import com.github.NCIT.forum.entity.Section;
import com.github.NCIT.forum.entity.Topic;
import com.github.NCIT.forum.entity.User;
import java.util.Set;

import org.springframework.data.jpa.repository.JpaRepository;


public interface TopicRepository extends JpaRepository<Topic, Integer> {
    
    Set<Topic> findBySection(Section section);
    
    Set<Topic> findByUser(User user);
    
    Set<Topic> findAllByOrderByCreationDateDesc();
    
    Set<Topic> findTop5ByOrderByCreationDateDesc();
    
    
}
